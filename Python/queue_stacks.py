class Queue:
    """ A simple queue using two stacks """

    def __init__(self):
        self.in_stack = []
        self.out_stack = []

    def enqueue(self, item):
        self.in_stack.append(item)

    def dequeue(self):
        if not self.out_stack:
            while self.in_stack:
                self.out_stack.append(
                   self.in_stack.pop())
        return self.out_stack.pop() 

    def is_empty(self):
        if not self.in_stack and not self.out_stack:
            return True
        return False

    def peek(self):
        if self.in_stack: 
            return self.in_stack[0]
        else:
            return self.out_stack[-1]

if __name__ == "__main__":
   
    queue = Queue()

    queue.enqueue(5)
    queue.enqueue(8)
    queue.enqueue(3)
    assert queue.peek() == 5
    assert queue.dequeue() == 5
    assert queue.is_empty() == False
    assert queue.peek() == 8
    assert queue.dequeue() == 8
    assert queue.peek() == 3
    assert queue.dequeue() == 3
    assert queue.is_empty() == True
