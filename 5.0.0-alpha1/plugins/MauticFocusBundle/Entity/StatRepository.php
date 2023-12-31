<?php

namespace MauticPlugin\MauticFocusBundle\Entity;

use Mautic\CoreBundle\Entity\CommonRepository;

/**
 * @extends CommonRepository<Stat>
 */
class StatRepository extends CommonRepository
{
    /**
     * Fetch the base stat data from the database.
     *
     * @param int  $id
     * @param null $fromDate
     *
     * @return mixed
     */
    public function getStats($id, $type, $fromDate = null)
    {
        $q = $this->createQueryBuilder('s');

        $expr = $q->expr()->andX(
            $q->expr()->eq('IDENTITY(s.focus)', (int) $id),
            $q->expr()->eq('s.type', ':type')
        );

        if ($fromDate) {
            $expr->add(
                $q->expr()->gte('s.dateAdded', ':fromDate')
            );
            $q->setParameter('fromDate', $fromDate);
        }

        $q->where($expr)
            ->setParameter('type', $type);

        return $q->getQuery()->getArrayResult();
    }
}
