@extends('layout');
@section('content');
<?php	    
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\mailsugerencia;

$correo = new mailsugerencia;
Mail::to('destinatario@correo.com')->send($correo);
return 'Mensaje enviado';
?>

@stop;