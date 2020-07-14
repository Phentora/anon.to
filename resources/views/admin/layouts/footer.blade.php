<footer class="c-footer">
    <div><i class="fa fa-fw fa-user"></i> {{ auth()->user()->username }}</div>
    <div class="ml-auto">{{ carbon()->toDateTimeString() }}</div>
</footer>
