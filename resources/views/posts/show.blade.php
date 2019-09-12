@extends('layouts.master') {{-- @section('title', $post->title. '. __('head.post')))
--}} @section('meta_description', ' '.'$post->meta_description') @section('meta_keywords'
.'$post->meta_keywords'.', '. '$post->category->name'.', '.__('head.postcategory'))

@section('breadcrumbs')
    {{-- {{ Breadcrumbs::render('posts.show', $post) }} --}}
@endsection

@section('content')
<div class="row">
  <div class="aryt-layout-wrapper">
    <div class="art-content-layout">
      <div class="art-content-layout-row">
        <div class="art-layout-cell art-content">
          <article class="art-post art-messages" style="display: none;">
            <div class="art-postcontent clearfix"></div>
          </article>&#65279;
          <script type="text/javascript" src="http://grecia24.ru//plugins/content/javascript/reflection.js"></script>



          <div class="item-page">
            <article class="art-post">
              <div class="art-postmetadataheader">
                <h2 class="art-postheader"><a href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Δημιουργούνται νέα μουσεία στην Ελλάδα στους πρόποδες του Ολύμπου και τα μοναστήρια των Μετεώρων</font></font></a></h2></div>
              <div class="art-postcontent clearfix">
                <div class="art-article">
                  <p>
                    <a class="highslide" href="{{asset('images/olympos_mousio.jpg')}}"
                      onclick="return hs.expand(this, { captionText: &quot;olympos mousio&quot;, slideshowGroup: &quot;563&quot; })"><img style="float: left; margin-right: 5px;" src="{{asset('images/olympos_mousio.jpg')}}"
                        alt="olympos mousio" width="200" height="113"></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Στην Ελλάδα εγκρίθηκαν δύο νέα έργα ύψους 800 χιλ. Ευρώ, τα οποία προσφέρουν τη δημιουργία ψηφιακού «πλανητάριου» κοντά στα πιο σημαντικά αξιοθέατα της χώρας - τα ορεινά μοναστήρια των Μετεώρων και τον Όλυμπο.</font></font>
                  </p>



                  <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Σύμφωνα με το έργο, ένας τουρίστας θα μπορεί να επισκεφτεί την αίθουσα που βρίσκεται στους πρόποδες των βουνών για να συγκρίνει τον εικονικό κόσμο με τον πραγματικό, αναρρίχνοντας τα Μετέωρα ή τον Όλυμπο. </font>
                    <font
                      style="vertical-align: inherit;">Κάθε «πλανητάριο» διαθέτει επιπλέον εγκαταστάσεις για εκθέσεις
                      και διαλέξεις. </font><font style="vertical-align: inherit;">Εδώ μπορείτε να παρακολουθήσετε εκπαιδευτικές ταινίες σε 3D. </font>
                      <font
                        style="vertical-align: inherit;">Οι ξεναγήσεις θα είναι διαθέσιμες σε πολλές γλώσσες.</font>
                        </font>
                  </p>
                  <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Τα Μετέωρα (Μετέωρα) είναι ένα συγκρότημα ορθόδοξων μοναστηριών που βρίσκεται στις κορυφές των βράχων. </font>
                    <font
                      style="vertical-align: inherit;">Προσελκύει τους πιστούς και τους τουρίστες με την υπέροχη ομορφιά
                      του. </font><font style="vertical-align: inherit;">Το ψηφιακό «πλανητάριο» αφιερωμένο στα μοναστήρια θα βρίσκεται στους πρόποδες των βουνών, στην πόλη της Καλαμπάκας. </font>
                      <font
                        style="vertical-align: inherit;">Οι εικονικές εκδρομές έχουν σχεδιαστεί για να βοηθήσουν τους
                        επισκέπτες να γνωρίσουν την ιστορία των μοναστηριών, την
                        εσωτερική μοναστική δομή και τη ζωή των μοναχών.</font>
                        </font>
                  </p>
                  <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ο Όλυμπος έχει γίνει ένα από τα σύμβολα όχι μόνο της Ελλάδας, αλλά και ολόκληρης της αρχαίας κουλτούρας. </font>
                    <font
                      style="vertical-align: inherit;">Είναι εδώ, σύμφωνα με τη μυθολογία, ότι το πάνθεο των Ελλήνων
                      θεών με επικεφαλής τον Δία καθόταν. </font><font style="vertical-align: inherit;">Για να επισκεφθείτε το πλανητάριο που λέει για τον Όλυμπο, θα πρέπει να σταματήσετε στην πόλη Ελασσόνα (Ελασσόνα, Ελασσόνα), που προσφέρει μια γραφική θέα στην κορυφή που βρίσκεται 24 χιλιόμετρα βορειοανατολικά. </font>
                      <font
                        style="vertical-align: inherit;">Οι εικονικές εκδρομές θα μιλήσουν για μυθολογικά και ιστορικά
                        οικόπεδα που σχετίζονται με αυτό το βουνό.</font>
                        </font>
                  </p>
                </div>
              </div>
            </article>
          </div>
          <!-- begin nostyle -->

        </div>
      </div>
    </div>
  </div>
</div>
<br> @endsection
