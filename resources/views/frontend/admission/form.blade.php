@extends ('frontend.layouts.app')
@section('content')
{{ Form::open(['route' =>'admission.store','class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
<div class="container">
    <div class="card-body">
        <code>The fields with * are compulsory.</code>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group floating-label">
                    <select name="programme1" id="programme1" class="form-control">
                        <option value="civil">Bachelor's in Civil Engineering</option>
                        <option value="computer">Bachelor's in Computer Engineering</option>
                    </select>
                    <label for="programme1">Programme [Priority 1]</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group floating-label">
                    <select name="programme2" id="programme2" class="form-control">
                        <option value="none">None</option>
                        <option value="civil">Bachelor's in Civil Engineering</option>
                        <option value="computer">Bachelor's in Computer Engineering</option>
                    </select>
                    <label for="programme2">Programme [Priority 2]</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <input name="name" id="name" type="text" class="form-control" required>
                    <label for="name"> Name [In Block Letters] <code>*</code></label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Gender</label>
                    <div class="radio radio-styled">
                        <label>
                            <input type="radio" name="gender" value="1" checked>
                            <span>Male</span>
                        </label>
                    </div>
                    <div class="radio radio-styled">
                        <label>
                            <input type="radio" name="gender" value="0">
                            <span>Female</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <input name="dob_n" id="dob_n" type="date" class="form-control" placeholder="2074-01-01 B.S." required>
                    <label for="dob_n"> Date of Birth <code>*</code></label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input name="email" id="email" type="email" class="form-control" placeholder="sample@example.com"
                           required>
                    <label for="email">Email id <code>*</code></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <input name="tel" id="tel" type="text" class="form-control">
                    <label for="tel">Tel No:</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input name="mobile" id="mobile" type="text" class="form-control" required>
                    <label for="mobile">Mobile No <code>*</code></label>
                </div>
            </div>
        </div>
    
        <!-- permanent address section-->
        <div class="row">
            <h3> Permanent Address </h3>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <input name="zone" id="zone" type="text" class="form-control" placeholder="Bagmati" required>
                    <label for="zone">Zone <code>*</code></label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input name="district" id="district" type="text" class="form-control" placeholder="Kathmandu" required>
                    <label for="district">District <code>*</code></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <input name="vdc" id="vdc" type="text" class="form-control" placeholder="Kathmandu" required>
                    <label for="vdc">VDC/Municipality <code>*</code></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <input name="ward" id="ward" type="text" class="form-control" required>
                    <label for="ward">Ward No<code>*</code></label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input name="tol" id="tol" type="number" class="form-control">
                    <label for="tol">Tol/Block No</label>
                </div>
            </div>
        </div>
        <!--current address section-->
        <div class="row">
            <h3> Current Address </h3>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <input name="c_zone" id="c_zone" type="text" class="form-control" placeholder="Bagmati">
                    <label for="c_zone">Zone</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input name="c_district" id="c_district" type="text" class="form-control" placeholder="Kathmandu">
                    <label for="c_district">District</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <input name="c_vdc" id="c_vdc" type="text" class="form-control" placeholder="Kathmandu">
                    <label for="c_vdc">VDC/Municipality</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <input name="c_ward" id="c_ward" type="text" class="form-control">
                    <label for="c_ward">Ward No</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input name="c_tol" id="c_tol" type="number" class="form-control">
                    <label for="c_tol">Tol/Block No</label>
                </div>
            </div>
        </div>
        <!--parent's information section-->
        <div class="row">
            <h3> Parent's Information </h3>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <input name="father" id="father" type="text" class="form-control" placeholder="Name">
                    <label for="father">Father's Name</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <input name="f_occupation" id="f_occupation" type="text" class="form-control">
                    <label for="f_occupation">Occupation</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <input name="mother" id="mother" type="text" class="form-control" placeholder="Name">
                    <label for="mother"> Mother's Name</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <input name="m_occupation" id="m_occupation" type="text" class="form-control">
                    <label for="m_occupation"> Occupation</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <input name="p_email" id="p_email" type="email" class="form-control" placeholder="sample@example.com">
                    <label for="p_email">Parent's Email id</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <input name="p_tel" id="p_tel" type="text" class="form-control">
                    <label for="p_tel">Parent's Tel No</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input name="p_mobile" id="p_mobile" type="text" class="form-control">
                    <label for="p_mobile">Parent's Mobile No</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <input name="guardian" id="guardian" type="text" class="form-control" placeholder="Name">
                    <label for="guardian">Local Guardian's Name</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <input name="relation" id="relation" type="text" class="form-control">
                    <label for="relation">Relation to the Guardian</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <input name="g_tel" id="g_tel" type="text" class="form-control">
                    <label for="g_tel">Tel No</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input name="g_mobile" id="g_mobile" type="text" class="form-control">
                    <label for="g_mobile">Mobile No</label>
                </div>
            </div>
        </div>
        <!--academic details section-->
        <div class="row">
            <h3> Academic Details</h3>
        </div>
        <div class="row">
            <div class="col-sm-1">
                School Leaving Certificates
            </div>
            <div class="col-sm-4 col-sm-offset-1">
                <div class="form-group">
                    <input name="slc_board_uni" id="slc_board_uni" type="text" class="form-control" required>
                    <label for="slc_board_uni">Board/University <code>*</code></label>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <input name="slc_year" id="slc_year" type="text" class="form-control" required>
                    <label for="slc_year">Year of Completion<code>*</code></label>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <input name="slc_division" id="slc_division" type="text" class="form-control" required>
                    <label for="slc_division">Division <code>*</code></label>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <input name="slc_score" id="slc_score" type="text" class="form-control" required>
                    <label for="slc_score">Percentage/CGPA <code>*</code></label>
                </div>
            </div>
            <div class="col-sm-10 col-sm-offset-2">
                <div class="form-group">
                    <input name="slc_remarks" id="slc_remarks" type="text" class="form-control">
                    <label for="slc_remarks">Remarks</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                A Level /10+2/Diploma in Engg./Others
            </div>
            <div class="col-sm-4 col-sm-offset-1">
                <div class="form-group">
                    <input name="college_board_uni" id="college_board_uni" type="text" class="form-control" required>
                    <label for="college_board_uni">Board/University <code>*</code></label>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <input name="college_year" id="college_year" type="text" class="form-control" required>
                    <label for="college_year">Year of Completion<code>*</code></label>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <input name="college_division" id="college_division" type="text" class="form-control">
                    <label for="college_division">Division </label>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <input name="college_score" id="college_score" type="text" class="form-control" required>
                    <label for="college_score">Percentage/CGPA <code>*</code></label>
                </div>
            </div>
            <div class="col-sm-10 col-sm-offset-2">
                <div class="form-group">
                    <input name="college_remarks" id="college_remarks" type="text" class="form-control">
                    <label for="college_remarks">Remarks</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <input name="ioe_roll" id="ioe_roll" type="text" class="form-control" required>
                    <label for="ioe_roll">IOE Entrance Roll No.<code>*</code></label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <input name="ioe_score" id="ioe_score" type="text" class="form-control" required>
                    <label for="ioe_score">Score/Percentage (in %)<code>*</code></label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <input name="ioe_rank" id="ioe_rank" type="text" class="form-control" required>
                    <label for="ioe_rank">Rank<code>*</code></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group"> <!-- Select a file to import. -->
                <input type="file" name="file" id="file_input" required>
                <label for="file_input">Upload Your Score Card<code>*</code></label>
            </div>
        </div>
        <div class="row">
            <div class="form-group pull-right" style="position: relative;left: 50%;transform: translateX(-50%);">
                <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="Save">
            </div>
        </div>
    </div>
</div>
{{ Form::close() }}

@endsection