<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('global.vite')
</head>

<body class="m-4">
    <x-primary-button type="submit" click="on" style="orange" class="w-32 mt-10 mb-10" />
    <x-primary-text color="green" text="Lorem, ipsum dolor sit amet consectetur Adipisicing elit. In, est." />
    <x-default-text text="Lorem, ipsum dolor sit amet consectetur Adipisicing elit. In, est." class="mt-10" />
    <x-primary-link text="Lorem, ipsum dolor sit amet consectetur Adipisicing elit. In, est." color="green" link="/" font="bold" />
    <x-label-text text="Lorem, ipsum dolor sit amet consectetur Adipisicing elit. In, est." />
    <x-small-text text="Lorem, ipsum dolor sit amet consectetur Adipisicing elit. In, est." class="mt-10" />
    <x-primary-input placeholder="help" style="orange" icon="{{ asset('assets/icons/user.svg') }}" class="w-52 mt-52" />
</body>

</html>
