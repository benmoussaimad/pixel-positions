<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    //Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    //Act & Assert
    Expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags', function () {
    //AAA
    $job = Job::factory()->create();
    $job->tag('FrontEnd');
    expect($job->tags)->toHaveCount(1);
});
