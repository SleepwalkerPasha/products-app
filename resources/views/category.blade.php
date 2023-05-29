<!DOCTYPE html>
html>
<head>
    <title>!DOCTYPE</title>
    <meta charset="utf-8">
</head>
<body>
    <form>
        <input type="text" name="lowest_price" placeholder="Type lowest price field">
        <input type="text" name="highest_price" placeholder="Type highest field">
        <input type="text" name="page_size" placeholder="Type page size">
        <button>Filter</button>
    </form>
    <div>
        <div>
            <ul>{{$category->name}}</ul>
        </div>
        @foreach($products as $product)
        <ul>{{ $product->name }}</ul>
        <ul>{{ $product->code }}</ul>
        <ul>{{ $product->description }}</ul>
        <ul>{{ $product->created_at }}</ul> 
        <ul>{{ $product->price }}</ul> 
        <img src="$product->img_path" alt="image">
        <ul>{{ $product->count }}</ul> 
        <ul>{{ $product->category_id }}</ul> 
        @endforeach
    </div>
</body> 
</html>
