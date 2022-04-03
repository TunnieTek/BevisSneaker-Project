<form action="" method="POST">
    @csrf
    <div class="form-group">
        <label for="user_name">Name</label>
        <input type="text" class="form-control" id="user_name" name="user_name" value="{{ $user->user_name }}">
    </div>    
    <div class="form-group">
        <label for="user_email">Email</label>
        <input type="email" name="user_email" id="user_email" value="{{ $user->user_email}}">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="{{ $user->password }}">
    </div>
    <div class="form-group">
        <label for="role">Role</label>
        <input type="text" name="role" id="role" value="{{ $user->role }}">
    </div>
        <button type="submit" style="margin-top: 5px">Submit</button>      
</form>

<style>
    .form-group{
        margin-top: 20px;
    }
</style>