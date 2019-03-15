<?php

namespace App\Workflow;


use App\Helpers\Email;

class Confirmation extends WorkflowObserver
{
    private $customer;
    private $products;
    private $order;

    public function update(WorkflowInterface $workflow)
    {
        $data = $workflow->getData();

        $this->customer = $data['customer'];
        $this->products = $data['products'];
        $this->order = $data['order'];

        $this->createEmail();
    }

    public function createEmail()
    {
        $emailBody = '<html><body>';
        $emailBody .= 'Beste '.$this->customer->first_name.'<br><br>Hartelijk bedankt voor de bestelling van de volgende producten: ';
        $emailBody .= '<br><br><table><thead><tr><th>Product naam</th><th>Maat</th><th>Aantal</th><th>Prijs per stuk</th></tr></thead><tbody>';
        foreach ($this->products as $product){
            $emailBody .= '<tr>';
            $emailBody .= '<td>'.$product->name.'</td>';
            $emailBody .= '<td>'.$product->shirt_size.'</td>';
            $emailBody .= '<td>'.$product->amount.'</td>';
            $emailBody .= '<td>'.$product->price.'</td>';
            $emailBody .= '</tr>';
        }
        $emailBody .= '</tbody></table><br>Tremendous Tees</body></html>';



        $email = new Email($this->customer->email, 'Bevestiging order '. $this->order->order_number, $emailBody);
        $email->dummy();

        return true;
    }
}