<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>静的ページを表示しよう</title>
 </head>
 
 <body>
    <h1>投稿一覧</h1>
    <table>
         <tr>
             <td>ID</td>
             <td>タイトル</td>
             <td>本文</td>
             <td>作成日時</td>
             <td>更新日時</td>
         </tr>
         @foreach($posts as $post)
             <tr>
                 <td>{{ $post->id }}</td>
                 <td>{{ $post->title }}</td>
                 <td>{{ $post->content }}</td>
                 <td>{{ $post->created_at }}</td>
                 <td>{{ $post->updated_at }}</td>
             </tr>            
         @endforeach       
     </table>

 </body>
 
 </html>