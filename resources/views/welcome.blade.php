<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo App - Laravel</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Styles -->
    <style>*{margin:0;padding:0;box-sizing:border-box}body{font-family:'Nunito',sans-serif;background:linear-gradient(135deg,#667eea 0%,#764ba2 100%);min-height:100vh;padding:20px;display:flex;justify-content:center;align-items:flex-start}.container{background:white;border-radius:20px;box-shadow:0 15px 35px rgba(0,0,0,0.1);padding:40px;width:100%;max-width:500px;margin-top:50px}.header{text-align:center;margin-bottom:30px}.header h1{color:#333;font-size:2.5rem;font-weight:700;margin-bottom:10px;background:linear-gradient(135deg,#667eea,#764ba2);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}.header p{color:#666;font-size:1.1rem}.todo-list{list-style:none;margin-bottom:30px}.todo-item{background:#f8f9fa;border-radius:12px;padding:15px 20px;margin-bottom:12px;display:flex;align-items:center;transition:all 0.3s ease;border-left:4px solid #667eea}.todo-item:hover{transform:translateX(5px);box-shadow:0 5px 15px rgba(0,0,0,0.1)}.todo-item::before{content:"✓";color:#667eea;font-weight:bold;margin-right:12px;font-size:1.2rem}.todo-text{color:#333;font-size:1.1rem;font-weight:500}.empty-state{text-align:center;padding:40px 20px;color:#666}.empty-icon{font-size:4rem;margin-bottom:20px;opacity:0.5}.empty-state p{font-size:1.2rem;margin-bottom:10px}.empty-state .subtext{font-size:0.9rem;opacity:0.7}.stats{background:#f8f9fa;border-radius:12px;padding:15px;text-align:center;margin-top:20px}.stats .count{font-size:1.5rem;font-weight:700;color:#667eea;margin-bottom:5px}.stats .label{font-size:0.9rem;color:#666}@media(max-width:768px){.container{margin-top:20px;padding:30px 20px}.header h1{font-size:2rem}}@keyframes fadeInUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}.todo-item{animation:fadeInUp 0.5s ease forwards}.todo-item:nth-child(odd){animation-delay:0.1s}.todo-item:nth-child(even){animation-delay:0.2s}</style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>
                <i class="fas fa-clipboard-check"></i>
                My Todos
            </h1>
            <p>Stay organized and productive</p>
        </div>

        @if(!empty($todos) && count($todos))
            <ul class="todo-list">
                @foreach($todos as $index => $todo)
                    <li class="todo-item">
                        <span class="todo-text">{{ $todo->title }}</span>
                    </li>
                @endforeach
            </ul>
            
            <div class="stats">
                <div class="count">{{ count($todos) }}</div>
                <div class="label">Total Tasks</div>
            </div>
        @else
            <div class="empty-state">
                <div class="empty-icon">📝</div>
                <p>Aucun todo pour le moment</p>
                <p class="subtext">Commencez par ajouter votre première tâche !</p>
            </div>
        @endif
    </div>
</body>
</html>