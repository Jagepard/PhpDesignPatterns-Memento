## Table of contents

- [\Behavioral\Memento\Memento](#class-behavioralmementomemento)
- [\Behavioral\Memento\Caretaker](#class-behavioralmementocaretaker)
- [\Behavioral\Memento\Originator](#class-behavioralmementooriginator)

<hr />

### Class: \Behavioral\Memento\Memento

> Class Memento

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\Behavioral\Memento\Originator](#class-behavioralmementooriginator)</em> <strong>$originator</strong>)</strong> : <em>void</em><br /><em>Memento constructor.</em> |
| public | <strong>getState()</strong> : <em>string</em> |

<hr />

### Class: \Behavioral\Memento\Caretaker

> Class Caretaker

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getMemento()</strong> : <em>mixed</em> |
| public | <strong>setMemento(</strong><em>[\Behavioral\Memento\Memento](#class-behavioralmementomemento)</em> <strong>$memento</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Behavioral\Memento\Originator

> Class Originator

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getState()</strong> : <em>string</em> |
| public | <strong>printState()</strong> : <em>void</em> |
| public | <strong>setState(</strong><em>\string</em> <strong>$state</strong>)</strong> : <em>void</em> |

