<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Formular de contact',
    'email_message' => 'Ai primit o nouă cerere de ofertă prin formularul de contact',
    'success_redirect' => '',
    'sendIpAddress' => false,
    'email' => array(
    'from' => 'dragos.serbanescu1@gmai.com',
    'to' => 'dragos.serbanescu1@gmai.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Nume',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Nume\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'Telefon' => array(
    'order' => 3,
    'type' => 'tel',
    'label' => 'Telefon',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Telefon\' is required.'
    )
    ),
    'message' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Mesaj',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Mesaj\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>