@extends('backend.layouts.app')

@section('title', 'Admission')

@section('content')
<div id="base" style="padding: 0;">
    <div id="content" style="padding: 0;">
        <section>
            <div class="section-body" style="font-size: 12px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-printable card-underline">
                            <div class="card-head no-print">
                                <header class="text-info text-uppercase">LEC Admission Form</header>
                                <div class="tools">
                                    <div class="btn-group">
                                        <a class="btn btn-floating-action btn-primary" href="javascript:void(0);" onclick="window.print();">
                                            <i class="md md-print"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body style-default-bright">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <h2>Personal Details of {{$admission->name}}</h2>
                                        <h2 class="text-light text-default-light"> First Priority: {{$admission->prior_prog_1}} engineering</h2>
                                        <span>Date of birth: {{$admission-> dob_n}} B.S.<br/></span>
                                        <span>Gender:  {{$admission->gender}}<br/></span>
                                        <span>Tel/Mobile: {{$admission->tel_no}}, {{$admission->mobile}} <br/></span>
                                        <span>Email: {{$admission->email}} </span>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <div class="well">
                                            <h3>Permanent Address</h3>
                                            <div class="clearfix">
                                                <div class="pull-left"> Zone :</div>
                                                <div class="pull-right"> {{$admission->zone}}</div>
                                            </div>
                                            <div class="clearfix">
                                                <div class="pull-left"> District :</div>
                                                <div class="pull-right">{{$admission->district}}</div>
                                            </div>
                                            <div class="clearfix">
                                                <div class="pull-left"> VDC/Municipality :</div>
                                                <div class="pull-right"> {{$admission->vdc}}</div>
                                            </div>
                                            <div class="clearfix">
                                                <div class="pull-left"> Ward No :</div>
                                                <div class="pull-right"> {{$admission->ward}}</div>
                                            </div>
                                            <div class="clearfix">
                                                <div class="pull-left"> Tol/Block No :</div>
                                                <div class="pull-right"> {{$admission->tol}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6"></div>
                                    <div class="col-xs-6 text-right">
                                        <div class="well">
                                            <h3>Temporary Address</h3>
                                            <div class="clearfix">
                                                <div class="pull-left"> Zone :</div>
                                                <div class="pull-right"> {{$admission->c_zone}} </div>
                                            </div>
                                            <div class="clearfix">
                                                <div class="pull-left"> District :</div>
                                                <div class="pull-right"> {{$admission->c_district}}
                                                    </div>
                                            </div>
                                            <div class="clearfix">
                                                <div class="pull-left"> VDC/Municipality :</div>
                                                <div class="pull-right">{{$admission->c_vdc}} </div>
                                            </div>
                                            <div class="clearfix">
                                                <div class="pull-left"> Ward No :</div>
                                                <div class="pull-right">{{$admission->c_ward}} </div>
                                            </div>
                                            <div class="clearfix">
                                                <div class="pull-left"> Tol/Block No :</div>
                                                <div class="pull-right">{{$admission->c_tol}} </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>Academic Details </h2>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="text-left" width="20%"> Level</th>
                                                    <th class="text-left" width="20%"> Board/University</th>
                                                    <th class="text-center" width="10%"> Year of Completion</th>
                                                    <th class="text-right" width="10%"> Division</th>
                                                    <th class="text-right" width="15%"> Percentage/ CGPA</th>
                                                    <th class="text-right" width="15%"> Remarks</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-left">
                                                        <strong>School Leaving Certificates</strong>
                                                    </td>
                                                    <td> {{$admission->slc_board_uni}} </td>
                                                    <td class="text-center"> {{$admission->slc_year}} <br></td>
                                                    <td class="text-right"> {{$admission->slc_division}} </td>
                                                    <td class="text-center"> {{$admission->slc_score}}% </td>
                                                    <td class="text-right"> {{$admission->slc_remarks}} </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">
                                                        <strong>A Level /10+2/Diploma in Engg./Others</strong>
                                                    </td>
                                                    <td> {{$admission->college_board_uni}}</td>
                                                    <td class="text-center"> {{$admission->college_year}}<br></td>                                                      </td>
                                                    <td class="text-right"> {{$admission->college_division}}</td>
                                                    <td class="text-center"> {{$admission->college_score}}%</td>
                                                    <td class="text-right"> {{$admission->college_remarks}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">
                                                        <span><strong>IOE Entrance Roll No:</strong></span>
                                                    </td>
                                                    <td class="text-left"> {{$admission->ioe_roll}} </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left hidden-border">
                                                        <span><strong>Score/Percentage: </strong></span>
                                                    </td>
                                                    <td class="text-left"> {{$admission->ioe_score}}% </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left hidden-border">
                                                        <span><strong>Rank: </strong></span>
                                                    </td>
                                                    <td class="text-left"> {{$admission->ioe_rank}} </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>Parent's Information</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <span> Father's Name:{{$admission->f_name}} </span>
                                    </div>
                                    <div class="col-md-4">
                                        <span> Father's Occupation: {{$admission->f_occupation}}</span>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <span> Mother's Name:{{$admission->m_name}} </span>
                                    </div>
                                    <div class="col-md-4">
                                        <span> Mother's Occupation:{{$admission->m_occupation}} </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <span> Parent's Tel No:{{$admission->p_tel}} </span>
                                    </div>
                                    <div class="col-md-4">
                                        <span> Parent's Mobile No:{{$admission->p_mob}} </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>Local Guardian's Information</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <span> Guardian's Name:{{$admission->guardian}} </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <span> Relation:{{$admission->r_guardian}} </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <span> Mobile No: {{$admission->g_mob}}</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="jFiler-items jFiler-row">
                                        <ul class="jFiler-items-list jFiler-items-default">
                                            <li class="jFiler-item">
                                                <div class="jFiler-item-container">
                                                    <div class="jFiler-item-inner">
                                                        <div class="jFiler-item-icon pull-left">
                                                            <i class="fa fa-file-pdf-o"></i>
                                                        </div>
                                                        <div class="jFiler-item-info pull-left">
                                                            <div class="jFiler-item-title"
                                                                 title="{{ $admission->name }}">
                                                                <a href="{{ asset($admission->documents[0]->path) }}"

                                                                   target="_blank">{{ $admission->name }} ( IOE Score Card )</a>
                                                                  <!--target="_blank">{{ $admission->name }} ( {{ $admission->documents[0]->name }} )</a>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection