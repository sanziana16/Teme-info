<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="main.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
<title>tema formular</title>

<body>

<form action="/submit-form" method="post">

<table>
<tr>
    <td colspan="2" class="title-container "><h2>Date personale</h2></td>
  </tr>
  <tr>
  <tr>
    <td>Nume și prenume</td>
    <td><input type="text" name="nume_prenume"></td>
  </tr>
  <tr>
    <td>Sex</td>
    <td>
      <input type="radio" id="feminin" name="sex" value="feminin">
      <label for="feminin">Feminin</label><br>
      <input type="radio" id="masculin" name="sex" value="masculin">
      <label for="masculin">Masculin</label><br>
    </td>
  </tr>
  <tr>
    <td>Studii</td>
    <td>
      <select name="studii">
        <option value="gimnaziale">Gimnaziale</option>
        <option value="liceale">Liceale</option>
        <option value="superioare">Superioare</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>CV</td>
    <td><textarea name="cv" rows="4" cols="30" placeholder="    --Scrieti CV-ul dvs.--"></textarea></td>
  </tr>
  <tr>
    <td>Buletin de știri</td>
    <td><input type="checkbox" name="newsletter" value="da"> Mă abonez la buletinul de știri săptămânal.</td>
  </tr>
  <tr>
    <td colspan="2" class="button-container">
      <input type="submit" value="Trimite">
      <input type="reset" value="Șterge">
    </td>
  </tr>
</table>

</form>

</body>
</html>




