<% if $Steps.Count > 1 %>
  <% include SilverStripe\UserForms\Form\UserFormStepNav %>
<% else %>
  <% include SilverStripe\UserForms\Form\UserFormActionNav %>
<% end_if %>
