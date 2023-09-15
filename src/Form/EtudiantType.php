<?php

namespace App\Form;

use App\Entity\Etudiant;
use Doctrine\ORM\Query\Expr\Select;
use phpDocumentor\Reflection\Types\Integer;
use phpDocumentor\Reflection\Types\String_;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Text;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use PHPUnit\Util\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EtudiantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('sexe',ChoiceType::class, [ 'choices' => ['Null' => 0, 'Homme' => 1, 'Femme' => 2]])
            ->add('anniv',DateType::class, ['widget' => 'choice',
                'years' => range(1970,2023)])
            ->add('carte')
        ;
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Etudiant::class,
        ]);
    }
}
