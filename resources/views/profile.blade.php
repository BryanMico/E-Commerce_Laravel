@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<h1>Profile</h1>
<div class="profile-details">
    <h2>Bryan Mico V. Baril</h2>
    <p>Email: bryanmico@ex.com</p>
    <p>Joined: August 7, 2024</p>
</div>
<div class="profile-edit">
    <h2>Edit Profile</h2>
    <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="Bryan Mico V. Baril">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="bryanmico@ex.com">
        <button type="submit">Save</button>
    </form>
</div>
<style>
    .profile-details, .profile-edit {
        margin-top: 1rem;
    }
    .profile-edit form {
        display: flex;
        flex-direction: column;
    }
    .profile-edit label, .profile-edit input {
        margin: 0.5rem 0;
    }
    .profile-edit button {
        padding: 0.5rem 1rem;
        border: none;
        background-color: #333;
        color: #fff;
        cursor: pointer;
        border-radius: 4px;
        margin-top: 1rem;
    }
    .profile-edit button:hover {
        background-color: #555;
    }
</style>
@endsection
