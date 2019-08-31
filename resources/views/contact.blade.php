@extends('layouts.master')
@section('title', __('head.contactheadtitle'))
@section('meta_description', __('meta.contactpagedescription'))
@section('meta_keywords', 'contact form, contact us, more info,')

@section('content')
  Contact

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
<td style="text-align: left;"><a href="/index.php?option=com_content&amp;view=article&amp;id=474%3Aepikoinonia&amp;catid=64%3Aepikoinonia&amp;lang=en"><img src="/images/stories/photos/foto_email/grecia24_ru.png" alt="grecia24 ru" width="200" height="20"></a></td>
</tr>
</tbody>
</table>
    <form action="{{route('postContact')}}">
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
      <textarea name="message" rows="8" cols="80"></textarea>

      <div class="form-group">
        Enter your message
        Write the sum of the digits below
        7 + 1
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <br>
@endsection
