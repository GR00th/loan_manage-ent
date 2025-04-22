<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\Borrower;
use App\Models\BorrowerFiles;
use App\Models\Borrowers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
use PDF;
=======
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0

class BorrowersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        $borrowers = Borrower::paginate(10); // Paginate with 10 items per page
        return view('borrowers.index', compact('borrowers'));
=======
        return view('borrowers.index', [
            'borrowers' => Borrower::all()
        ]);
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('borrowers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
=======
     
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'before:2005-01-01'],
            'occupation' => ['required', 'string', 'max:255'],
            'identification' => ['required', 'string', 'unique:borrowers'],
            'mobile' => ['required', 'string', 'unique:borrowers'],
            'email' => ['nullable', 'string', 'email', 'unique:borrowers'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'province' => ['required', 'string', 'max:255'],
            'zipcode' => ['nullable', 'string', 'max:255'],
            'files.*' => 'nullable|mimes:pdf,png,docx,jpg,jpeg|max:10240',
<<<<<<< HEAD
=======
            
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
        ], [
            'dob.before' => 'The date of birth must be before 1st January 2005.',
            'email.unique' => "The Email address is already in use.",
            'identification.unique' => "The National ID is already in use",
            'mobile.unique' => 'The Phone is already in use.',
        ]);
<<<<<<< HEAD

        try {
            DB::beginTransaction();
=======
        try {

            
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0

            $storeDataWithoutFiles = Borrower::create($request->all());
           
            if ($request->hasFile('files')) {
<<<<<<< HEAD
                $files = $request->file('files');
                $fileData = [];
                
                foreach ($files as $file) {
                    $filename = uniqid() . '_' . $file->getClientOriginalName();
                    Storage::disk('borrowers')->put($filename, file_get_contents($file));
                    $fileData[] = [
                        'borrower_id' => $storeDataWithoutFiles->id,
                        'file_path' => 'BORROWERS/' . $filename,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }
                
                // Bulk insert files
                if (!empty($fileData)) {
                    BorrowerFiles::insert($fileData);
                }
            }

            DB::commit();
            toast('Borrower ' . $request->first_name . ' added successfully', 'success');
            return redirect()->route('borrower.index');
        } catch (\Exception $e) {
            DB::rollBack();
=======
                foreach ($request->file('files') as $file) {
                    $filename = uniqid() . '_' . $file->getClientOriginalName();
                    Storage::disk('borrowers')->put($filename, file_get_contents($file));
                    BorrowerFiles::create([
                        'borrower_id' => $storeDataWithoutFiles->id,
                        'file_path' => 'BORROWERS/' . $filename,
                    ]);
                }
            }



            toast('Borrower ' . $request->first_name . ' added successfully', 'success');
            return redirect()->route('borrower.index');
        } catch (\Exception $e) {
            dd($e);
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
            toast('Whoops!!! Something went wrong ' . $e->getMessage(), 'warning');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $borrower)
    {
<<<<<<< HEAD
        $borrower = Borrower::with('files')->findOrFail($borrower);
        return view('borrowers.show', compact('borrower'));
=======
        return view('borrowers.show', [
            'borrower' => Borrower::findOrFail($borrower)
        ]);
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $borrower)
    {
<<<<<<< HEAD
        $borrower = Borrower::with('files')->findOrFail($borrower);
        return view('borrowers.edit', compact('borrower'));
=======
        return view('borrowers.edit', [
            'borrower' => Borrower::findOrFail($borrower)
        ]);
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $borrower)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'before:2005-01-01'],
            'occupation' => ['required', 'string', 'max:255'],
            'identification' => ['required', 'string'],
            'mobile' => ['required', 'string'],
            'email' => ['nullable', 'string', 'email'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'province' => ['required', 'string', 'max:255'],
            'zipcode' => ['nullable', 'string', 'max:255'],
            'files.*' => ['nullable|mimes:png,jpg,jpeg,pdf|max:2048'],
        ], [
            'dob.before' => 'The date of birth must be before 1st January 2005.'
<<<<<<< HEAD
        ]);

        try {
            DB::beginTransaction();
=======

        ]);
        try {


>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0

            $findBorrower = Borrowers::findOrFail($borrower);
            $findBorrower->update($request->except('files'));

            if ($request->hasFile('files')) {
<<<<<<< HEAD
                $files = $request->file('files');
                $fileData = [];
                
                foreach ($files as $file) {
                    $filename = uniqid() . '_' . $file->getClientOriginalName();
                    Storage::disk('borrowers')->put($filename, file_get_contents($file));
                    $fileData[] = [
                        'borrower_id' => $findBorrower->id,
                        'file_path' => 'BORROWERS/' . $filename,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }
                
                // Bulk insert files
                if (!empty($fileData)) {
                    BorrowerFiles::insert($fileData);
                }
            }

            DB::commit();
            toast('Borrower ' . $request->first_name . ' updated successfully', 'success');
            return redirect()->route('borrower.index');
        } catch (\Exception $e) {
            DB::rollBack();
=======
                foreach ($request->file('files') as $file) {
                    $filename = uniqid() . '_' . $file->getClientOriginalName();
                    Storage::disk('borrowers')->put($filename, file_get_contents($file));
                    BorrowerFiles::create([
                        'borrower_id' => $findBorrower->id,
                        'file_path' => 'BORROWERS/' . $filename,
                    ]);
                }
            }



            toast('Borrower ' . $request->first_name . ' updated successfully', 'success');
            return redirect()->route('borrower.index');
        } catch (\Exception $e) {
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
            toast('Whoops!!! Something went wrong ' . $e->getMessage(), 'warning');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $borrower, Request $request)
    {
        try {
<<<<<<< HEAD
            DB::beginTransaction();

=======
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
            $check_password = Hash::check($request->password, auth()->user()->password);
            if (!$check_password) {
                toast('These credentials do not match our records', 'warning');
                return redirect()->back();
            }
<<<<<<< HEAD

            $borrower = Borrower::findOrFail($borrower);
            $files = BorrowerFiles::where('borrower_id', $borrower->id)->get();
            
            if ($files->isNotEmpty()) {
                foreach ($files as $file) {
                    Storage::disk('borrowers')->delete($file->file_path);
                }
                BorrowerFiles::where('borrower_id', $borrower->id)->delete();
            }

            $borrower->delete();

            // Log the activity
            $user = auth()->user();
            $ipAddress = $request->ip();
            $userAgent = $request->header('User-Agent');
            $action = 'Borrower Deleted Successfully';
            ActivityLog::create([
                'user_id' => $user ? $user->id : null,
                'ip_address' => $ipAddress,
                'user_agent' => $userAgent,
                'action' => $action,
                'details' => 'Borrower ' . $borrower->first_name . ' Deleted Successfully by ' . $user->name
            ]);

            DB::commit();
            toast('Borrower deleted successfully', 'success');
            return redirect()->route('expenses.index');
        } catch (\Exception $e) {
            DB::rollBack();
            toast('Whoops!!! Something went wrong ' . $e->getMessage(), 'warning');
            return redirect()->route('expenses.index');
        }
    }

    /**
     * Generate PDF for borrower details
     */
    public function print(string $borrower)
    {
        $borrower = Borrower::with('files')->findOrFail($borrower);
        
        $pdf = PDF::loadView('borrowers.print', compact('borrower'));
        
        return $pdf->stream('borrower-' . $borrower->id . '.pdf');
    }
=======
            $borrower = Borrower::findOrFail($borrower)->first();
            $borrower->delete();
            $files = BorrowerFiles::where('borrower_id', "=", $borrower)->get();
            if ($files) {

                foreach ($files as $file) {
                    Storage::disk('borrowers')->delete($file->file_path);
                    $file->delete();
                }

                // Log the activity
                $user = auth()->user();
                $ipAddress = $request->ip();
                $userAgent = $request->header('User-Agent');
                $action = 'Borrower Deleted Successfully';
                ActivityLog::create([
                    'user_id' => $user ? $user->id : null,
                    'ip_address' => $ipAddress,
                    'user_agent' => $userAgent,
                    'action' => $action,
                    'details' => 'Borrower ' . Borrower::findOrFail($borrower)->first_name . ' Deleted Successfully by ' . $user->name
                ]);
                toast('Borrower deleted successfully', 'success');
                return redirect()->route('expenses.index');
            }
        } catch (\Exception $e) {
            toast('Whoops!!! Something went wrong ' .  $e->getMessage(), 'warning');
            return redirect()->route('expenses.index');
        }
    }
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
}
