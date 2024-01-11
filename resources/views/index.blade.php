<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <table>
    <tr>
    <th>nom</th>
    <th>prenom</th>
    <th>age</th>
    <th>action</th>
    </tr>
    @foreach ($stagiaires as $ stagiaire)
    <tr>
     <td>{{$stagiaire["nom]"}}</td>
     <td>{{$stagiaire["prenom]"}}</td>
     <td>{{$stagiaire["age]"}}</td>
     <td>{{$stagiaire["email]"}}</td>
     <td>
        <button> detail</button>
        <button>Ajouter</button>
        <button>Supprimer</button>
     </td>
    </tr>
  </table>

</body>
</html>