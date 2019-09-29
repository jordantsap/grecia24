@extends('layouts.master')
@section('title', __('head.contactheadtitle'))
@section('meta_description', __('meta.contactpagedescription'))
@section('meta_keywords', 'contact form, contact us, more info,')

@section('breadcrumbs')
    {{ Breadcrumbs::render('contact') }}
@endsection

@section('content')
<div class="row">
  <div class="col-xs-5">
    <table style="text-align: left; width: 361px; height: 95px;" border="0">
    <tbody style="text-align: left;">
    <tr style="text-align: left;">
    <td style="text-align: left;"><span style="font-size: 10pt;"><strong>Phone1:</strong></span></td>
    <td style="text-align: left;"><span style="font-size: 10pt;">+30.2310 519249</span></td>
    </tr>
    <tr style="text-align: left;">
    <td style="text-align: left;"><span style="font-size: 10pt;"><strong>Phone2:</strong></span></td>
    <td style="text-align: left;"><span style="font-size: 10pt;">+30.2310 660005<br></span></td>
    </tr>
    <tr style="text-align: left;">
    <td style="text-align: left;"><span style="font-size: 10pt;"><strong>Adress:</strong></span></td>
    <td style="text-align: left;"><span style="font-size: 10pt;">Lagada 301, Thessaloniki, Zip Code:56430<br></span></td>
    </tr>
    <tr style="text-align: left;">
    <td style="text-align: left;"><span style="font-size: 10pt;"><strong>E_mail:</strong></span></td>
    <td style="text-align: left;"><a href="{{'mailto:info@grecia24.ru'}}"><img src="{{asset('images/grecia24_ru.png')}}" alt="grecia24 ru" width="200" height="20"></a></td>
    </tr>
    </tbody>
    </table>
        <form action="{{url('contact')}}" method="POST" name="contact" id="contact">
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="email">E Mail</label>
            <input type="email" class="form-control" id="email" placeholder="email">
          </div>
          <div class="form-group">
            <label for="tel">Telephone</label>
            <input type="text" class="form-control" id="tel" placeholder="Telephone">
          </div>
          <label for="message">Message</label>
          <textarea name="message" rows="5" cols="80"></textarea>

          <div class="form-group">
            Enter your message
            Write the sum of the digits below
            7 + 1
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>

  </div>
  <div class="col-xs-7">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6052.103200506359!2d22.939247!3d40.672832!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a839d9005ff2c1%3A0x684487c985d3cc93!2sLagkada%20301%2C%20Stavroupoli%20564%2029%2C%20Greece!5e0!3m2!1sen!2sus!4v1567508139433!5m2!1sen!2sus" width="100%" height="470" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </div>
</div>

<br>
@endsection
