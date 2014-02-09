<form action="docs-assets/php/process/insert_lead.php" class="form-signin"  role="form" method="POST">

        <h2 class="form-signin-heading"><?php echo "$contact_page_marketing_comment_str"?></h2><br>
        
        <p class="select_action">
        <select id="select_action"  name="select_action" class="form-control">
        <option value="Devis"><? echo $form_contact_devis?></option>
        <option value="Demande de partenariat"><? echo $form_contact_ask_partner?></option>
        <option value="Autre"><? echo  $form_contact_other?></option>
        </select>
        <br>

        <p class="name">
        <input type="text" id="name" name="name"  class="form-control" placeholder="<? echo $form_contact_name_str ?>" required autofocus><br>
        </p>
        <p class="email">
         <input type="email" id="email" name="email"  class="form-control" placeholder="<? echo $form_contact_email_str ?>" required placeholder="Enter a valid email address"><br>
         </p>
        <p class="phone_number">
        <input type="text"  id="phone_number" name="phone_number"  class="form-control" placeholder="<? echo $form_contact_phone_str ?>" required autofocus><br>
        </p>
       <p class="society">
        <input type="text" id="society" name="society" class="form-control" placeholder="<? echo $form_contact_society_str ?>" required autofocus><br>
        </p>
         <p class="budget">
        <input type="text" id="budget" name="budget"  class="form-control" placeholder="<? echo $form_contact_budget_str ?>" required autofocus><br>
        </p>
         <p class="message">
        <textarea type="text" cols="40" row="5" id="message" name="message" class="form-control" placeholder="<? echo $form_contact_mess_str ?>" required autofocus></textarea>
        </p>

        <button class="btn btn-lg btn-primary btn-block" type="submit"><? echo   $btn_send_str?></button><br><br>

 
</form>