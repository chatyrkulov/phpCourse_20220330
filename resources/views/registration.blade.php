<form  method="post">
  @csrf
<div class="wrapper" style="margin: 10px"><span>Your Name:</span>
  <input type="text" class="input" name="name" style="height: 24px; margin-bottom: 1rem:" required placeholder="Alex Galager">
</div><div class="wrapper" style="margin: 10px"><span>Email:</span>
  <input type="text" class="input" name="email" style="height: 24px; margin-bottom: 1rem:" required placeholder="Alex Galager">
</div>
<div class="wrapper" style="margin: 10px"><span>Password:</span>
  <input type="password" class="input" name="password" style="height: 24px; margin-bottom: 1rem:" required placeholder="hopecenter@gmail.com">
</div>
<button type="submit" name="button">submit</button>
</form>
