<?php

namespace Rector\PHPStan\Tests\Rector\Node\RemoveNonExistingVarAnnotationRector\Fixture;

class SomeClass
{
    public function get()
    {
        /** @var Training[] $trainings */
        return $this->getData();
    }
}

?>
-----
<?php

namespace Rector\PHPStan\Tests\Rector\Node\RemoveNonExistingVarAnnotationRector\Fixture;

class SomeClass
{
    public function get()
    {
        return $this->getData();
    }
}

?>
