...
use App\Models\User;
class Task extends Model
{    
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

	  
}
