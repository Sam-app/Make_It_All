@extends('layouts.app')
<style>
                          
        html {
            overflow-y: scroll;
        }
          body {
            margin: 0;
            text-align: center;
            position:relative
        }
          table {
            border: none;
            border-collapse: collapse;
          }

          td {
            padding: 8px;
            border: 1px solid #CCC;
          }

          th {
            text-align: left;
            padding: 8px;
            border: 1px solid #CCC;
          }

          .container {
            padding: 8px;
          }

          .navbar{
            background-color: #E7E7E7;
            padding: 8px;
          }

          ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        li {
            float: left;
        }

        .navbtn{
          display: block;
          color: #333333;
          padding: 024px;
          height: 64px;
          background-color: #E7E7E7;
          border: none;
          font-size: 12px;
        }

        .navbtn:hover {
          background-color: #C9C9C9;
        }


            .loginBanner{
                box-sizing: border-box;
                text-align: left;
                border: 2px solid black;
                border-radius: 5px;
                font-size: 16px;
                font-family: Arial;


            }
            .loginDataDiv{
                padding-left: 89%;
            }
            .logOutButtonDiv{
                padding-left: 91%;
            }
            .banner{
                text-align: center;
                font-size: 25px;
                font-family: "Trebuchet MS";
                font-variant: small-caps;
            }
            .table{
                border-collapse: collapse;

            }
            .headingCell{
                text-align: center;
                /*border-bottom: 1px black;*/
                background-color: #230c32;
                color: white;
                padding: 11px;
                font-family: "Trebuchet MS";

            }
            .dataRow{}

            .dataRow:nth-child(even){background-color: #f2f2f2}

            .dataRow:hover {background-color: darkorchid; color: white;}


            .dataCell{
                text-align: center;
                padding: 11px;
                font-family: Arial;
            }
            .logOutButton{
                font-family: Arial;
                font-size: 16px;
                background-color: #3b1253;
                color: white;
                height: 30px;
            }
            .logOutButton:hover {background-color: darkorchid; color: white;}

            .modifyButton{
                font-family: Arial;
                font-size: 16px;
                background-color: #9ee7ff;
                text-align: center;
                height: 30px;
                /*border: 2px ridge #00002b;*/
                border-radius: 4px;
            }

            .modifyButton:hover {background-color: #d12e73; color: white;/*border: 3px groove #491225; */border-radius: 4px;}

        .recTbl{
        background-color: white;
        border: 1px solid #DDDDDD;
        border-collapse: collapse;
        margin:8px;
        width:720px;
        }


        .recHdr{
          border: none;
          border-collapse: collapse;
          color:#4D90FF;
          /* min-width:640px;
          max-width:640px; */
          font-weight: bold;
        }

        .recLbl{
          font-family: "Trebuchet MS", Helvetica, sans-serif;
          font-size: 12px;
          text-align: left;
          border: none;
          border-collapse: collapse;
          width:192px;
        }

        .recVal{
          text-align: left;
          border:none;
          border-left: none;
          border-right: none;
          border-collapse: collapse;
        }

        .recInput{
            border:1px solid #DDDDDD;
            width:100%;
          }

          .recTitle{
            text-align:left;
            color:white;
            font-size: 24px;
            background-color: #DD3B3C;
            padding:16px;
            width:768px;
            margin:auto;
          }
          .recContainer{
            background-color: #F6F6F6;
            padding:16px;
            width:768px;
            margin:auto;
          }

          .recRow{
            text-align: left;
            border:none;
          }

          .recBtn{
            background-color: #DD3B3C;
            border-radius: 32px;
            color:white;
            float: right;
            border:none;
            padding:8px;
            font-size: 12px;
          }
   </style>
@section('content')
  
<!-- content  -->
  <div class="banner" id="titleBanner">
        <h1>Items Table</h1>
    </div>  
{{-- tool table --}}
    @if (count($tools)>0)
    <div class="body" id="tableBody">
            <table class="table" align="center">
                <tr>
                    <th class="headingCell">Item Name</th>
                    <th class="headingCell">Serial Number</th>
                    <th class="headingCell">Item Type</th>
                    <th class="headingCell">Purches Date</th>
                    <th class="headingCell"> </th>
                </tr>
        @foreach ($tools as $tool)
                 
                    <tr class="dataRow">
                            <td class="dataCell">{{$tool->name}}</td>
                            <td class="dataCell">{{$tool->serial_number}}</td>
                            <td class="dataCell">{{$tool->type}}</td>
                            <td class="dataCell">{{$tool->bought_on}}</td>
                            <td class="dataCell"><a href="/tools/{{$tool->id}}"><button type="button" class="btn btn-primary">View</button></a></td>
                     </tr>
                
        @endforeach
        {{$tools->links()}}
   
        @else
        <h3>Ther is No Item</h3>
    @endif
@endsection