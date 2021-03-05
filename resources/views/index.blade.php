<!doctype html>
<html>
 <body>
   <form method='post' action='/save'>

     <!-- Message -->
     @if(Session::has('message'))
       <p >{{ Session::get('message') }}</p>
     @endif

     <!-- Add/List records -->
     <table border='1' style='border-collapse: collapse;'>
       <tr>
         <th>Store</th>
         <th>City</th>
         <th>Price</th>
         <th></th>
       </tr>
       <tr>
         <td colspan="4">{{ csrf_field() }}</td>
       </tr>
       <!-- Add -->
       <tr>
         <td><input type='text' name='name'></td>
         <td><input type='text' name='city'></td>
         <td><input type='text' name='price'></td>
         <td><input type='submit' name='submit' value='Add'></td>
       </tr>

       <!-- List -->
       @foreach($userData['data'] as $user)
       <tr>
         <td>{{ $user->name }}</td>
         <td>{{ $user->city }}</td>
         <td>{{ $user->price }}</td>
         <td><a href='/{{ $user->id }}'>Update</a> <a href='/deleteUser/{{ $user->id }}'>Delete</a></td>
       </tr>
       @endforeach
    </table>
  </form>

  <!-- Edit -->
  @if($userData['edit'])
  <form method='post' action='/save'>
   <table>
     <tr>
       <td colspan='2'><h1>Edit record</h1></td>
     </tr>
     <tr>
       <td colspan="2">{{ csrf_field() }}</td>
     </tr>
     <tr>
       <td>Name</td>
       <td><input type='text' name='name' value='{{ $userData["editData"]->name }}' ></td>
     </tr>
     <tr>
       <td>City</td>
       <td><input type='text' name='city' value='{{ $userData["editData"]->city }}'></td>
     </tr> 
     <tr>
       <td>Price</td>
       <td><input type='text' name='price' value='{{ $userData["editData"]->price }}' ></td>
     </tr>
     <tr>
       <td>&nbsp;<input type='hidden' value='{{ $userData["edit"] }}' name='editid'></td>
       <td><input type='submit' name='submit' value='Submit'></td>
     </tr>
   </table>
  </form>
  @endif
 
  
  @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
 </body>
</html>