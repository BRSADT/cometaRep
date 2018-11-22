<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border="0" cellpadding="0" cellspacing="0">
<tr>
    <td>
        Name:&nbsp;
    </td>
    <td>
        <span id="Name" class="editable">Mudassar</span>
          <span id="apellido" class="editable">Avila</span>
    </td>
</tr>
</table>

  </body>
</html>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
$(function () {
    //Loop through all Labels with class 'editable'.
    $(".editable").each(function () {
        //Reference the Label.
        var label = $(this);


        //Add a TextBox next to the Label.
        if(label.attr('id')=="Name"){
          label.after("<input type = 'text'  name='nombre' style = 'display:none' />");

        }
        if(label.attr('id')=="apellido"){
          label.after("<input type = 'text'  name='apellido' style = 'display:none' />");

        }

        //Reference the TextBox.
        var textbox = $(this).next();

        //Set the name attribute of the TextBox.
        textbox[0].name = this.id.replace("lbl", "txt");

        //Assign the value of Label to TextBox.
        textbox.val(label.html());

        //When Label is clicked, hide Label and show TextBox.
        label.click(function () {

            $(this).hide();
            $(this).next().show();
        });

        //When focus is lost from TextBox, hide TextBox and show Label.
        textbox.focusout(function () {
            $(this).hide();
            $(this).prev().html($(this).val());
            $(this).prev().show();
        });
    });
});
</script>
