<?php

namespace Silber\Bouncer\Constraints;

use Closure;
use Illuminate\Support\Collection;

class Builder
{
    /**
     * The list of constraints.
     *
     * @var \Illuminate\Support\Collection<\Silber\Bouncer\Constraints\Constraint|static>
     */
    protected $constraints;

    /**
     * Constructor.
     *
     */
    public function __construct()
    {
        $this->constraints = new Collection;
    }

    /**
     * Create a new builder instance.
     *
     * @return static
     */
    public static function make()
    {
        return new static;
    }

    /**
     * Add a "where" constraint.
     *
     * @param  string|\Closure  $column
     * @param  mixed  $operator
     * @param  mixed  $value
     * @return $this
     */
    public function where($column, $operator = null, $value = null)
    {
        if ($column instanceof Closure) {
            return $this->whereNested('and', $column);
        }

        $constraint = call_user_func_array(
            [Constraint::class, 'where'],
            func_get_args()
        );

        return $this->addConstraint($constraint);
    }

    /**
     * Add an "or where" constraint.
     *
     * @param  string|\Closure  $column
     * @param  mixed  $operator
     * @param  mixed  $value
     * @return $this
     */
    public function orWhere($column, $operator = null, $value = null)
    {
        if ($column instanceof Closure) {
            return $this->whereNested('or', $column);
        }

        $constraint = call_user_func_array(
            [Constraint::class, 'orWhere'],
            func_get_args()
        );

        return $this->addConstraint($constraint);
    }

    /**
     * Add a "where column" constraint.
     *
     * @param  string  $a
     * @param  mixed  $operator
     * @param  mixed  $b
     * @return $this
     */
    public function whereColumn($a, $operator, $b = null)
    {
        $constraint = call_user_func_array(
            [Constraint::class, 'whereColumn'],
            func_get_args()
        );

        return $this->addConstraint($constraint);
    }

    /**
     * Add an "or where column" constraint.
     *
     * @param  string  $a
     * @param  mixed  $operator
     * @param  mixed  $b
     * @return $this
     */
    public function orWhereColumn($a, $operator, $b = null)
    {
        $constraint = call_user_func_array(
            [Constraint::class, 'orWhereColumn'],
            func_get_args()
        );

        return $this->addConstraint($constraint);
    }

    /**
     * Build the compiled list of constraints.
     *
     * @return \Silber\Bouncer\Constraints\Constrainer
     */
    public function build()
    {
        if ($this->constraints->count() == 1) {
            return $this->constraints->first();
        }

        return new Group($this->constraints);
    }

    /**
     * Add a nested "where" clause.
     *
     * @param  string  $logicalOperator  'and'|'or'
     * @param  \Closure  $callback
     * @return $this
     */
    protected function whereNested($logicalOperator, Closure $callback)
    {
        $callback($builder = new static);

        $constraint = $builder->build()->logicalOperator($logicalOperator);

        return $this->addConstraint($constraint);
    }

    /**
     * Add a constraint to the list of constraints.
     *
     * @param  \Silber\Bouncer\Constraints\Constrainer  $constraint
     * @return $this
     */
    protected function addConstraint($constraint)
    {
        $this->constraints[] = $constraint;

        return $this;
    }
}
