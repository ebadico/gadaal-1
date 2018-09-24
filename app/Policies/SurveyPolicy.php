<?php

namespace App\Policies;

use App\User;
use App\Survey;
use Illuminate\Auth\Access\HandlesAuthorization;

class SurveyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the survey.
     *
     * @param  \App\User  $user
     * @param  \App\Survey  $survey
     * @return mixed
     */
    public function view(User $user, Survey $survey)
    {
        return $user->hasPermissionTo('View-Survey');

    }

    /**
     * Determine whether the user can create surveys.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
          return false;

    }

    /**
     * Determine whether the user can update the survey.
     *
     * @param  \App\User  $user
     * @param  \App\Survey  $survey
     * @return mixed
     */
    public function update(User $user, Survey $survey)
    {
          return false;
    }

    /**
     * Determine whether the user can delete the survey.
     *
     * @param  \App\User  $user
     * @param  \App\Survey  $survey
     * @return mixed
     */
    public function delete(User $user, Survey $survey)
    {
           return false;

    }

    /**
     * Determine whether the user can restore the survey.
     *
     * @param  \App\User  $user
     * @param  \App\Survey  $survey
     * @return mixed
     */
    public function restore(User $user, Survey $survey)
    {
                    return $user->hasRole('super-admin');

    }

    /**
     * Determine whether the user can permanently delete the survey.
     *
     * @param  \App\User  $user
     * @param  \App\Survey  $survey
     * @return mixed
     */
    public function forceDelete(User $user, Survey $survey)
    {
        //
    }
}
