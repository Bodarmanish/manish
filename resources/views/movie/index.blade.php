<form method="post" action="/movie/47">
    {{csrf_field()}}
    {{method_field("put")}}
    <p>
        <label>Name:</label>
        <input type="text" name="name"/>
    </p>

    <p>
        <input type="submit" name="btnsubmit" value="submit"/>
    </p>
</form>
