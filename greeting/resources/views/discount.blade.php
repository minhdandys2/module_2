<h3>Product Discount Calculator</h3>
<form action="{{route("discount")}}" method="post">
    @csrf
    <table>
        <tr>
            <td>Product Description</td>
            <td><input type="text" name="description"></td>
        </tr>
        <tr>
            <td>List Price</td>
            <td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td>Discount Percent</td>
            <td><input type="text" name="percent">%</td>
        </tr>
        <tr>
            <td><input type="submit" value="Calculate Discount"></td>
        </tr>
    </table>
</form>

