@csrf
<div class="row">
    <div class="col-md-6 form-group">
        <label class="form-label" for="name">Full name<sup
                    class="text-danger ml-1">*</sup></label>
        <input class="form-control" type="text" id="name" name="name" placeholder="John Doe"
               value="{{old('name', $contacto->name)}}" required>
        <div class="invalid-feedback">Please enter your full name!</div>
        @error('name')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-md-6 form-group">
        <label class="form-label" for="email">Email address<sup
                    class="text-danger ml-1">*</sup></label>
        <input class="form-control" type="email" id="email" name="email"
               placeholder="j.doe@example.com" value="{{ old('email',$contacto->email) }}" required>
        <div class="invalid-feedback">Please enter a valid email address!</div>
        @error('email')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="subject">Subject<sup
                class="text-danger ml-1">*</sup></label>
    <input class="form-control" type="text" id="subject" name="subject"
           placeholder="Title of your message" value="{{old('subject', $contacto->subject)}}" required>
    <div class="invalid-feedback">Please enter a subject!</div>
    @error('subject')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label class="form-label" for="message">Message<sup
                class="text-danger ml-1">*</sup></label>
    <textarea class="form-control" id="message" name="message" rows="5"
              placeholder="Write your message here" required>
        {{old('message',$contacto->message)}}
    </textarea>
    <div class="invalid-feedback">Please write a message!</div>
    @error('message')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="text-center pt-2">
    <button class="btn btn-primary" type="submit">Send Message</button>
</div>