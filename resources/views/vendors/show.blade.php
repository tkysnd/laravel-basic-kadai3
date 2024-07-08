<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Laravel基礎</title>
 </head>
 
 <body>
     <h1>{{ $vendor->vendor_name }}の商品一覧</h1>
     <table>
         <tr>
             <th>ID</th>
             <th>商品名</th>
             <th>価格</th>
             <th>作成日時</th>
             <th>更新日時</th>
         </tr>
             <!-- <tr>
                 <td>{{ $products->id }}</td>
                 <td>{{ $products->product_name }}</td>
                 <td>{{ $products->price }}</td>
                 <td>{{ $products->created_at }}</td>
                 <td>{{ $products->updated_at }}</td>
             </tr>             -->
     </table>
 </body>
 
 </html>