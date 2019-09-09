@extends('layouts.master') @section('title', __('head.contactheadtitle')) @section('meta_description',
__('meta.contactpagedescription')) @section('meta_keywords', 'contact form, contact
us, more info,')

@section('breadcrumbs')
    {{ Breadcrumbs::render('posts') }}
@endsection

@section('content')

<div class="blog">
  <article class="art-post">
    <div class="art-postmetadataheader">
      <h2 class="art-postheader"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ειδήσεις Νέα</font></font></h2></div>
  </article>
  <table class="blog" cellpadding="0" cellspacing="0" width="100%">

    <tbody>
      <tr>
        <td valign="top">
          <table width="100%" cellpadding="0" cellspacing="0">
            <tbody>
              <tr>
                <td valign="top" width="100%" class="article_column">
                  <article class="art-post">
                    <div class="art-postmetadataheader">
                      <h2 class="art-postheader"><a href="{{route('posts.show', $post->slug)}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Δημιουργούνται νέα μουσεία στην Ελλάδα στους πρόποδες του Ολύμπου και τα μοναστήρια των Μετεώρων</font></font></a></h2></div>
                    <div class="art-postcontent clearfix">
                      <div class="art-article">
                        <p>
                          <a href="">
                            <img style="float: left; margin-right: 5px;" src="{{asset('images/olympos_mousio.jpg')}}" alt="olympos mousio" width="200" height="113"></a>
                          <font
                            style="vertical-align: inherit;"><font style="vertical-align: inherit;">Στην Ελλάδα εγκρίθηκαν δύο νέα έργα ύψους 800 χιλ. Ευρώ, τα οποία προσφέρουν τη δημιουργία ψηφιακού «πλανητάριου» κοντά στα πιο σημαντικά αξιοθέατα της χώρας - τα ορεινά μοναστήρια των Μετεώρων και τον Όλυμπο.</font></font>
                        </p>
                      </div>
                      <p class="readmore">
                        <a class="readon art-button" href="{{route('posts.show', $post->slug)}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Διαβάστε περισσότερα ...</font></font>
                        </a>
                      </p>
                    </div>
                  </article>
                </td>

              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</div>

@endsection
