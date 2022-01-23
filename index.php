<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>書籍ブックマーク</title>
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="css/indexstyle.css">
</head>
<body>

<!-- Main[Start] -->
<div class="title-container">
    <p class="title-text">書籍ブックマーク</p>
  </div>

<div id="inputcontainer">
<form method="post" action="insert.php">
  <table class="form-table">
    <tr>
      <th class="form-header">書籍タイトル</th>
      <td class="form-data">
        <input type="text" class="form-text" name="title">
      </td>
    </tr>
    <tr>
      <th class="form-header">URL
      </th>
      <td class="form-data">
        <input type="text" class="form-text" name="url">
      </td>
    </tr>
    <tr>
      <th class="form-header">評価<br></th>
      <td class="form-data">
        <div class="stars">
          <input id="star5" type="radio" name="rating" value="5" />
          <label for="star5">★</label>
          <input id="star4" type="radio" name="rating" value="4" />
          <label for="star4">★</label>
          <input id="star3" type="radio" name="rating" value="3" />
          <label for="star3">★</label>
          <input id="star2" type="radio" name="rating" value="2" />
          <label for="star2">★</label>
          <input id="star1" type="radio" name="rating" value="1" />
          <label for="star1">★</label>
        </div>
    </tr>
    <tr>
      <th class="form-header">コメント<br></th>
      <td class="form-data">
        <textarea id="text" class="form-longtext" name="comment"></textarea>
      </td>
    </tr>
  </table>
  <p id="sendbutton"><input type="submit" id="send" value="送信"></input></p> 
</form>
</div>

<div class="listlink_container">
    <div class="listlink"><a class="linktext" href="select.php">これまでにブックマークした本を表示</a></div>
  </div>
<!-- Main[End] -->


</body>
</html>