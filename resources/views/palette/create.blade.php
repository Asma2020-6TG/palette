<!DOCTYPE>
<html>
<form method="POST">
    @csrf
<h1> create new colors palette </h1>
    <div>
        <label> colors category </label>
        <select name="category" >
            <option> warm tones </option>
            <option> cold tones </option>
            <option> dark tones </option>
            <option> bright tones </option>
            <option> monochromes </option>
        </select>
    </div>
    <hr> <hr>
   <div>
        <label> palette size </label>
        <input type="number" required name="size" min="3" max="6">
    </div>
    <hr>
    <hr>
    <div>
        <label> add colors </label>
        <input type="color" name="color1" >
        <input type="color" name="color2" >
        <input type="color" name="color3" >
        <input type="color" name="color4" >
        <input type="color" name="color5" >
        <input type="color" name="color6" >
    </div>
    <hr>
    <hr>
    <input type="submit" value="create palette"/>
</form>
</html>
