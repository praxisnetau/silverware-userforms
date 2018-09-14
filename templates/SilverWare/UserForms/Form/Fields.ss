<% if $Legend %>
  <fieldset>
    <legend>$Legend</legend>
    <% include SilverStripe\UserForms\Form\UserFormFields %>
  </fieldset>
<% else %>
  <div class="userform-fields">
    <% include SilverStripe\UserForms\Form\UserFormFields %>
  </div>
<% end_if %>
