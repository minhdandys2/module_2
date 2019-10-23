<form action="{{route("checkEnglish")}}" method="post">
    @csrf
    <table>
        <tr>
            <td>English</td>
            <td><input type="text" name="english"></td>
        </tr>
        <tr>
            <td><button type="submit">Translation</button></td>
        </tr>
    </table>
</form>

<div><span>{{$english}}</span> mean <span>{{$result}}</span></div>
