<html>
<head>
    <title>!DOCTYPE</title>
    <meta charset="utf-8">
</head>
<body>
    <div>
        <h1>Product: </h1>
        <ul>{{ $product->name }}</ul>
        <ul>{{ $product->code }}</ul>
        <ul>{{ $product->description }}</ul>
        <ul>{{ $product->created_at }}</ul> 
        <ul>{{ $product->price }}</ul> 
        <ul>{{ $product->img_path }}</ul> 
        <ul>{{ $product->count }}</ul> 
        <ul>{{ $product->category_id }}</ul> 
    </div>
</body> 
</html>