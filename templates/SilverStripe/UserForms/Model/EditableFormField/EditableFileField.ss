<div class="input-group">
  <div class="custom-file">
    <input class="custom-file-input<% if $extraClass %> $extraClass<% end_if %>" $getAttributesHTML('class') />
    <label class="custom-file-label" for="$ID"><%t EditableFileField_ss.CHOOSE 'Choose...' %></label>
  </div>
</div>
