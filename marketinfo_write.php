<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <style>
    form {
      /* Just to center the form on the page */
      margin: 0 auto;
      width: 800px;

      /* To see the limits of the form */
      padding: 1em;
      border: 1px solid #CCC;
      border-radius: 1em;
    }

    div + div {
      margin-top: 1em;
    }

    label {
      /* To make sure that all label have the same size and are properly align */
      display: inline-block;
      width: 90px;
      text-align: right;
    }

    input, textarea {
      /* To make sure that all text field have the same font settings
         By default, textarea are set with a monospace font */
      font: 1em sans-serif;

      /* To give the same size to all text field */
      width: 600px;

      -moz-box-sizing: border-box;
           box-sizing: border-box;

      /* To harmonize the look & feel of text field border */
      border: 1px solid #999;
    }

    input:focus, textarea:focus {
      /* To give a little highligh on active elements */
      border-color: #000;
    }

    textarea {
      /* To properly align multiline text field with their label */
      vertical-align: top;

      /* To give enough room to type some text */
      height: 5em;

      /* To allow users to resize any textarea vertically
         It works only on Chrome, Firefox and Safari */
      resize: vertical;
    }

    .button {
      /* To position the buttons to the same position of the text fields */
      padding-left: 90px; /* same size as the label elements */
    }

    button {
      /* This extra magin represent the same space as the space between
         the labels and their text fields */
      margin-left: .5em;
    }
  </style>
  </head>
    <body>
      <form action="test_Form.php" method="get"> <!-- post 메소드 사용하려면 get을 post로 교체-->
  <div>
    <label for="title">제목</label>
    <input type="text" id="title" name="user_name" value ="마켓 이름">
  </div>

  <div>
    <label for="mail">소개</label>
    <input type="text" id="shorttext" name="user_email" value ="짧은 소개">
  </div>
<div>
  <label for="mail">날짜</label>
  <input type="text" id="datepicker" placeholder="개최 날짜">
  <script>
      $(function () {
          $("#datepicker").datepicker();
      });
  </script>
</div>
  <div>
    <label for="msg">내용</label>
    <textarea id="msg" name="user_message"></textarea>
  </div>
  <div class="button">
    <button type="submit">등록하기</button>
  </div>
</form>

    </body>
</html>
