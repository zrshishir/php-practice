<?php 
interface Stack{
    public function push(string $item);
    public function pop();
    public function top();
    public function isEmpty();
}

class StackUsingArray implements Stack {
    private $limit;
    private $stack;

    public function __construct(int $limit ){
        $this->limit = $limit;
        $this->stack = [];
    }

    public function isEmpty(): bool {
        return empty($this->stack);
    }

    public function pop(): string {
        if($this->isEmpty()){
            throw new UnderflowException('Stack is empty.');
        } else {
            return array_pop($this->stack);
        }
    }

    public function push(string $item){
        if(count($this->stack) < $this->limit){
            return array_push($this->stack, $item);
        } else {
            throw new OverflowException('Stack is full.');
        }
    }

    public function top(): string {
        if($this->isEmpty()){
            throw new UnderflowException('Stack is empty.');
        } else {
            return end($this->stack);
        }
    }
}

try{
    $list = new StackUsingArray(3);
    $list->push('a1');
    $list->push('a2');
    $list->push('a3');
    $list->push('a4');
    $list->push('a5');
    echo $list->top();

} catch (Exception $e){
    $e->getMessage();
}