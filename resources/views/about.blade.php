@extends('layouts.app')
@section('content')

    <div class="container">

        <h1>About Seminar halls</h1>



        <p> During Graduation and Under-graduation programs, most of the presentations,lectures and events take place at seminar halls.This page shows NJIT Seminar halls information of the departments mentioned in the table.
            It gives the basic information required for the students regarding the Seminar halls at NJIT.</p>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Name of the department</th>
                <th scope="col">Seminar Hall</th>
                <th scope="col">Hall Address</th>
                <th scope="col">Room Number</th>
                <th scope="col">Contact</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">Information Systems</th>
                <td>Faculty Memorial Hall</td>
                <td>12 Summit St,Newark,NJ</td>
                <td>201</td>
                <td>9765435678</td>
                <td>fmu@njit.edu</td>
            </tr>
            <tr>
                <th scope="row">Food Sciences</th>
                <td>Kupfrian Hall</td>
                <td>13 Summit St,Newark,NJ</td>
                <td>202</td>
                <td>9768656789</td>
                <td>kph@njit.edu</td>
            </tr>
            <tr>
                <th scope="row">Mechanical Engineering</th>
                <td>Temple Hall</td>
                <td>14 Summit St,Newark,NJ</td>
                <td>203</td>
                <td>9987654477</td>
                <td>thl@njit.edu</td>

            </tr>
            <tr>
                <th scope="row">Bio-Technology</th>
                <td>Statue Hall</td>
                <td>15 Summit St,Newark,NJ</td>
                <td>204</td>
                <td>9987657896</td>
                <td>shl@njit.edu</td>



            </tr>
            </tbody>
        </table>

        <p>For more information about NJIT, please visit the website,
            <a href="https://www.cappex.com/colleges/New-Jersey-Institute-of-Technology">NJIT Additional Info</a></p>

    </div>

@stop