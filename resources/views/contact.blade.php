@extends('template')
@section('title', 'Contact Us')
@section('main')
@parent
<div class="container p-5" style="max-width:400px;">
    <h4 class="text-center">Goswami Payments Bank</h4>
    <h5 class="text-center">Contact Us</h5><br>
    <form>
            <!-- Name input -->
            <div class="form-outline mb-4">
              <input type="text" id="form4Example1" class="form-control" />
              <label class="form-label" for="form4Example1">Name</label>
            </div>
          
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form4Example2" class="form-control" />
              <label class="form-label" for="form4Example2">Email address</label>
            </div>
          
            <!-- Message input -->
            <div class="form-outline mb-4">
              <textarea class="form-control" id="form4Example3" rows="4"></textarea>
              <label class="form-label" for="form4Example3">Message</label>
            </div>
          
            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
              <input
                class="form-check-input me-2"
                type="checkbox"
                value=""
                id="form4Example4"
                checked
              />
              <label class="form-check-label" for="form4Example4">
                Send me a copy of this message
              </label>
            </div>
          
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
          </form>
    </div>
@endsection