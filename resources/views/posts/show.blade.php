<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Eloquent ORM</title>
 </head>
 
 <body>
    <h1>投稿</h1>
    <table>
         <tr>
             <th>ID</th>
             <td>{{ $singlepost->id }}</td>
         </tr>
         <tr>
             <th>タイトル</th>
             <td>{{ $singlepost->title }}</td>
         </tr>
         <tr>
             <th>本文</th>
             <td>{{ $singlepost->content }}</td>
         </tr>    
         <tr>
             <th>作成日時</th>
             <td>{{ $singlepost->created_at }}</td>            
         </tr>
         <tr>
             <th>更新日時</th>
             <td>{{ $singlepost->updated_at }}</td>
         </tr>      
     </table>
     

 </body>
 
 </html>