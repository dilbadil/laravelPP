@section('content')
    <div ng-controller="TodoController">
        <h1>Todo App</h1>
        <input type="text" ng-model="newTodoName">
        <button ng-click="addTodo()">Tambah Todo</button>
        <ul>
            <li ng-repeat="todo in todos">
                {{ todo.title }}
                <span>
                    <a href="javascript:void(0)" ng-click="deleteTodo($index)">&times;</a>
                </span>
            </li>
        </ul>
    </div>
@stop
