<?php
use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->first()->id,
    ]);

    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags', function () {
    $employer = Employer::factory()->create();
    $job = Job::factory()->create(
        ['employer_id' => $employer->first()->id]
    );

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});
