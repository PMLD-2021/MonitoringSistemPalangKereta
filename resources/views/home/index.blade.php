@extends('layouts.main')

@section('container')
<div class="row">
    <div class="col-8">
        <div class="row p-3 pt-0">
            <div class="col-6">
                <div class="p-3 rounded-3 bg-primary text-light">
                    <h3 class="text-center">Gate</h3>
                    <div class="text-center mr-2">
                        <a href="#" class="btn btn-outline-light btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Open</a>
                        <a href="#" class="btn btn-danger btn-lg" tabindex="-1" role="button" aria-disabled="true">Close</a>
                    </div>
                    <!-- <div class="row gx-2">
                                <div class="col-6 text-center text-light bg-primary p-2 border">
                                    <p>Open</p>
                                </div>
                                <div class="col-6 text-center bg-warning p-2 border">
                                    <p>Close</p>
                                </div>
                            </div> -->
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 rounded-3 bg-primary text-light">
                    <h3 class="text-center">Battery Capacity</h3>
                    <div class="text-center mr-2">
                        <a href="/battery" class="btn btn-warning btn-lg" tabindex="-1" role="button" aria-disabled="true">Check</a>
                    </div>
                </div>
            </div>

            <!-- Kamera -->
            <div class="col-12 mt-4">
                <div class="video-wrap">
                    <video id="video" playsinline autoplay></video>
                </div>

                <!-- <div class="controller">
                            <button id="snap">Capture</button>
                        </div> -->

                <!-- <canvas id="canvas" width="640" height="480"></canvas> -->

                <script>
                    'use strict';

                    const video = document.getElementById('video');
                    const canvas = document.getElementById('canvas');
                    const snap = document.getElementById('snap');
                    const errorMsgElement = document.getElementById('spanErrorMsg');

                    const constraints = {
                        audio: false,
                        video: {
                            width: 820,
                            height: 450
                        }
                    };

                    async function init() {
                        try {
                            const stream = await navigator.mediaDevices.getUserMedia(constraints);
                            handleSuccess(stream);
                        } catch (e) {
                            errorMsgElement.innerHTML = `navigator.getUserMedia.error:${e.toString()}`;
                        }
                    }
                    // Success
                    function handleSuccess(stream) {
                        window.stream = stream;
                        video.srcObject = stream;
                    }
                    // Load init
                    init();

                    // Draw Image
                    // var context = canvas.getContext('2d');
                    // snap.addEventListener("click", function() {
                    //     context.drawImage(video, 0, 0, 640, 480);
                    // });
                </script>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="row p-3 bg-primary rounded-3">
            <div class="col-12 bg-primary">
                <div class="p-2 text-light text-center">
                    <h3>Train Position</h3>
                </div>
            </div>
            <div class="col-6">
                <div class="p-2 text-light text-center">
                    <h5>East</h5>
                    <div class="rounded-3 bg-danger text-light py-1">
                        <h6>Sensor 1</h6>
                    </div>
                    <div class="mt-4"><i class="fas fa-circle fa-3x text-danger "></i></div>
                </div>
            </div>
            <div class="col-6">
                <div class="p-2 text-light text-center">
                    <h5>West</h5>
                    <div class="rounded-3 bg-danger text-light py-1">
                        <h6>Sensor 1</h6>
                    </div>
                    <div class="mt-4"><i class="fas fa-circle fa-3x text-light"></i></div>
                </div>
            </div>
            <div class="col-6">
                <div class="p-2 text-light text-center">
                    <div class="rounded-3 bg-danger text-light py-1">
                        <h6>Sensor 2</h6>
                    </div>
                    <div class="mt-4"><i class="fas fa-circle fa-3x text-danger "></i></div>
                </div>
            </div>
            <div class="col-6">
                <div class="p-2 text-light text-center">
                    <div class="rounded-3 bg-danger text-light py-1">
                        <h6>Sensor 2</h6>
                    </div>
                    <div class="mt-4"><i class="fas fa-circle fa-3x text-light"></i></div>
                </div>
            </div>
            <div class="col-6">
                <div class="p-2 text-light text-center">
                    <div class="rounded-3 bg-danger text-light py-1">
                        <h6>Sensor 3</h6>
                    </div>
                    <div class="mt-4"><i class="fas fa-circle fa-3x text-light "></i></div>
                </div>
            </div>
            <div class="col-6">
                <div class="p-2 text-light text-center">
                    <div class="rounded-3 bg-danger text-light py-1">
                        <h6>Sensor 3</h6>
                    </div>
                    <div class="mt-4"><i class="fas fa-circle fa-3x text-light"></i></div>
                </div>
            </div>
            <hr class="text-light mt-2">
            <div class="col-12">
                <div class="row">
                    <div class="col-6 p-2 text-light text-center">
                        <p><i class="fas fa-circle fa-3x text-danger"></i> On</p>
                    </div>
                    <div class="col-6 p-2 text-light text-center">
                        <p><i class="fas fa-circle fa-3x text-light"></i> Off</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection