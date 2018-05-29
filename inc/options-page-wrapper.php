<!-- Create a header in the default WordPress 'wrap' container -->
<div class="wrap">
   <div id="icon-themes" class="icon32"></div>
   <h2>Anwalt Daten</h2>
   <?php settings_errors(); ?>
   <?php
      if( isset( $_GET[ 'tab' ] ) ) {
          $active_tab = $_GET[ 'tab' ];
      }else{
        $active_tab = 'profile_1';
      }
      ?>
   <h2 class="nav-tab-wrapper">
      <a href="?page=hnp_anwalt_options&tab=profile_1" class="nav-tab <?php echo $active_tab == 'profile_1' ? 'nav-tab-active' : ''; ?>">Profil 1</a>
      <a href="?page=hnp_anwalt_options&tab=profile_2" class="nav-tab <?php echo $active_tab == 'profile_2' ? 'nav-tab-active' : ''; ?>">Profil 2</a>
      <a href="?page=hnp_anwalt_options&tab=profile_3" class="nav-tab <?php echo $active_tab == 'profile_3' ? 'nav-tab-active' : ''; ?>">Profil 3</a>
      <a href="?page=hnp_anwalt_options&tab=profile_4" class="nav-tab <?php echo $active_tab == 'profile_4' ? 'nav-tab-active' : ''; ?>">Profil 4</a>
      <a href="?page=hnp_anwalt_options&tab=all" class="nav-tab <?php echo $active_tab == 'all' ? 'nav-tab-active' : ''; ?>">All Profiles</a>
      <a href="?page=hnp_anwalt_options&tab=styles" class="nav-tab <?php echo $active_tab == 'styles' ? 'nav-tab-active' : ''; ?>">Styles</a>
   </h2>
   <form id="featured_upload" method="post" action="">
      <?php
         if( $active_tab == 'profile_1' ) { ?>
      <input type="hidden" name="pgnyt_form_submitted" value="Y">
      <p>
         Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="name" id="name" type="text" value="<?php echo $name; ?>" class="all-options" required/><br><br>
         Telefon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="phone" id="phone" type="number" value="<?php echo $phone; ?>" class="all-options" required/><br><br>
         Stadtname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="address" id="address" type="text" value="<?php echo $address; ?>" class="all-options" required/><br><br>
         Land &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
         <select name="country" id="country">
         
            <option value="DE" <?php if($country=='DE'){ echo 'selected'; } ?> >Deutschland</option>
            <option value="AT" <?php if($country=='AT'){ echo 'selected'; } ?> >Österreich</option>
            <option value="CH" <?php if($country=='CH'){ echo 'selected'; } ?> >Schweiz</option>
          
         </select>
         <br><br>
         Profil Link &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="profile_link" id="profile_link" type="text" value="<?php echo $profile_link; ?>" class="all-options" required/><br><br>
      </p>
      <p>
         <input class="button-primary" type="submit" name="form_submit" value="Update" />
      </p>
      <p><b>Mit [hnp-anwalt-1] kannst Du die Rich-Snippets/ Sterne Bewertung<br> des Profils auf einer Seite Deiner Wahl einfügen</b></p>
      <?php  } elseif($active_tab == 'profile_2') { ?>
      <input type="hidden" name="pgnyt_form_submitted2" value="Y">
      <p>
         Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="name2" id="name2" type="text" value="<?php echo $name2; ?>" class="all-options" required/><br><br>
         Telefon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="phone2" id="phone2" type="number" value="<?php echo $phone2; ?>" class="all-options" required/><br><br>
         Stadtname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="address2" id="address2" type="text" value="<?php echo $address2; ?>" class="all-options" required/><br><br>
         Land &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
         <select name="country2" id="country2">
            <option value="DE" <?php if($country2=='DE'){ echo 'selected'; } ?> >Deutschland</option>
            <option value="AT" <?php if($country2=='AT'){ echo 'selected'; } ?> >Österreich</option>
            <option value="CH" <?php if($country2=='CH'){ echo 'selected'; } ?> >Schweiz</option>
         </select>
         <br><br>
         Profil Link &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="profile_link2" id="profile_link2" type="text" value="<?php echo $profile_link2; ?>" class="all-options" required/><br><br>
      </p>
      <p>
         <input class="button-primary" type="submit" name="form_submit2" value="Update" />
      </p>
      <p><b>Mit [hnp-anwalt-2] kannst Du die Rich-Snippets/ Sterne Bewertung<br> des Profils auf einer Seite Deiner Wahl einfügen</b></p>
      <?php }elseif($active_tab == 'profile_3'){ ?> 
      <input type="hidden" name="pgnyt_form_submitted3" value="Y">
      <p>
         Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="name3" id="name3" type="text" value="<?php echo $name3; ?>" class="all-options" required/><br><br>
         Telefon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="phone3" id="phone3" type="number" value="<?php echo $phone3; ?>" class="all-options" required/><br><br>
         Stadtname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="address3" id="address3" type="text" value="<?php echo $address3; ?>" class="all-options" required/><br><br>
         Land &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
         <select name="country3" id="country3">
            <option value="DE" <?php if($country3=='DE'){ echo 'selected'; } ?> >Deutschland</option>
            <option value="AT" <?php if($country3=='AT'){ echo 'selected'; } ?> >Österreich</option>
            <option value="CH" <?php if($country3=='CH'){ echo 'selected'; } ?> >Schweiz</option>
         </select>
         <br><br>
         Profil Link &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="profile_link3" id="profile_link3" type="text" value="<?php echo $profile_link3; ?>" class="all-options" required/><br><br>
      </p>
      <p>
         <input class="button-primary" type="submit" name="form_submit3" value="Update" />
      </p>
      <p><b>Mit [hnp-anwalt-3] kannst Du die Rich-Snippets/ Sterne Bewertung<br> des Profils auf einer Seite Deiner Wahl einfügen</b></p>
      <?php }elseif($active_tab == 'profile_4') { ?>
      <input type="hidden" name="pgnyt_form_submitted3" value="Y">
      <p>
         Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="name4" id="name4" type="text" value="<?php echo $name4; ?>" class="all-options" required/><br><br>
         Telefon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="phone4" id="phone4" type="number" value="<?php echo $phone4; ?>" class="all-options" required/><br><br>
         Stadtname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="address4" id="address4" type="text" value="<?php echo $address4; ?>" class="all-options" required/><br><br>
         Land &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
         <select name="country4" id="country4">
            <option value="DE" <?php if($country4=='DE'){ echo 'selected'; } ?> >Deutschland</option>
            <option value="AT" <?php if($country4=='AT'){ echo 'selected'; } ?> >Österreich</option>
            <option value="CH" <?php if($country4=='CH'){ echo 'selected'; } ?> >Schweiz</option>
         </select>
         <br><br>
         Profil Link &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="profile_link4" id="profile_link4" type="text" value="<?php echo $profile_link4; ?>" class="all-options" required/><br><br>
      </p>
      <p>
         <input class="button-primary" type="submit" name="form_submit4" value="Update" />
      </p>
      <p><b>Mit [hnp-anwalt-4] kannst Du die Rich-Snippets/ Sterne Bewertung<br> des Profils auf einer Seite Deiner Wahl einfügen</b></p>
      <?php } else if($active_tab == 'all'){ ?>

            <input type="hidden" name="pgnyt_form_submitted3" value="Y">
      <p>
         Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="name5" id="name5" type="text" value="<?php echo $name5; ?>" class="all-options" required/><br><br>
         Telefon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="phone5" id="phone5" type="number" value="<?php echo $phone5; ?>" class="all-options" required/><br><br>
         Stadtname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="address5" id="address5" type="text" value="<?php echo $address5; ?>" class="all-options" required/><br><br>
         Land &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
         <select name="country5" id="country5">
            <option value="DE" <?php if($country5=='DE'){ echo 'selected'; } ?> >Deutschland</option>
            <option value="AT" <?php if($country5=='AT'){ echo 'selected'; } ?> >Österreich</option>
            <option value="CH" <?php if($country5=='CH'){ echo 'selected'; } ?> >Schweiz</option>
         </select>
         <br><br>
         Profil Link &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="profile_link5" id="profile_link5" type="text" value="<?php echo $profile_link5; ?>" class="all-options" required/><br><br>
      <p>
         <input class="button-primary" type="submit" name="form_submit5" value="Update" />
      </p>
      <p><b>Mit [hnp-anwalt-alle] kannst Du die Rich-Snippets/ Sterne Bewertung<br> des Profils auf einer Seite Deiner Wahl einfügen</b></p>
      <?php }else{ ?>

            <input type="hidden" name="pgnyt_form_submitted2" value="Y">
      <p>
          CSS for class : <b>hnpsnippet1</b> and <b>hnpsnippet2</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <textarea name="css1" id="css1" type="text" class="all-options" rows="4" cols="50" ><?php

          if(isset($css1)){
            echo $css1;
          }

          


           ?> </textarea></p><br>
      </p> 
      <p class="description">Default css: <b>.hnpsnippet1{
            color:black;
}
.hnpsnippet1>a{
      color:black;
} 
 .hnpsnippet2{
            color:black;
}</b></p> 
      <p>
         <input class="button-primary" type="submit" name="form_submit_6" value="Update" />
      </p>

      <?php } ?>
   </form>
</div>
<!-- /.wrap -->