<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>熊本のラーメン屋さん</title>
</head>

<body>
    <header>
        <h1><a href="#">熊本のラーメン屋さん</a></h1>
        <nav>
            <a href="mypage">管理者マイページ</a>
        </nav>
    </header>

    <main>
        <artiicle>
            <h1>店舗一覧</h1>
                    @foreach($stores as $store)
                        <div>
                            <div>
                                {{$store->name}}
                            </div>
                            <h2><a href="{{ route('store_information', $store) }}">編集</a></h2>
                            <h2>削除</h2>
                        </div>
                    @endforeach
                   
        </artiicle>
    </main>

    <footer>
        <p>&copy kumamoto-ramen All rights reserved.</p>
    </footer>

</body>